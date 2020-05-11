<?php

class CaptchaVerify
{
    private $captcha_value = '';
    private $captcha_field = '';
    private $answer_time = '';

    private function session_read()
    {
        session_start();

        $this->captcha_value = $_SESSION['captcha_value'];
        $this->captcha_field = $_SESSION['captcha_field'];
        $this->answer_time = $_SESSION['answer_time'];

        unset($_SESSION['captcha_value']);
        unset($_SESSION['captcha_field']);
        unset($_SESSION['answer_time']);
    }

    private function error_msg($message)
    {
        ++$_SESSION[$_SERVER['REMOTE_ADDR']];
        exit($message);
    }

    public function verify_code()
    {
        $this->session_read();

        if (isset($_POST['submit_form']) && !empty($this->captcha_value) && !empty($this->captcha_field) && !empty($this->answer_time)) {
            $this->current_time = strtotime(date('d-m-Y H:i:s'));

            if ($this->current_time - $this->answer_time < 6) {
                $this->error_msg('Too fast!');
            }
            if ($_POST[$this->captcha_field] == '') {
                $this->error_msg('Robot!');
            }

            if (md5(md5($_POST[$this->captcha_field])) == $this->captcha_value) {
                $mail = $_POST['email'];
                $theme = $_POST['theme'];
                $message = $_POST['message'];
                if (mail($mail, $theme, $message)) {
                    echo 'Mail was sent seccessfully.';
                }
            } else {
                $this->error_msg('Wrong captcha!');
            }
        } else {
            $this->error_msg('Hacker!');
        }
    }
}
