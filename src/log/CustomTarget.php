<?php
/**
 * CustomTarget.php
 */

namespace App\log;

use yii\log\Target;
use yii\log\Logger;

/**
 * Класс таргета логов, реализующий отправку email или sms в зависимости от уровня ошибки - warning или error.
 */
class CustomTarget extends Target
{
    /**
     * Отправка сообщений об ошибках по смс (уровень error) или email (уровень warning).
     *
     * @return void
     */
    public function export()
    {
        foreach ($this->messages as $message) {
            $level = $message[1];
            if ($level === Logger::LEVEL_ERROR) {

            } else if ($level === Logger::LEVEL_WARNING) {

            }
        }
    }
}
