<?php
/**
 * SmsSenderInterface.php
 */

namespace App\sms;

/**
 * Интерфейс отправителя sms-сообщений.
 */
interface SmsSenderInterface
{
    /**
     * Отправляет sms сообщение.
     *
     * @param string|array $phone   Номер получателя.
     * @param string       $message Текст сообщения.
     *
     * @return bool Возвращает true в случае успешной отправки.
     */
    public function sendSms($phone, $message): bool;
}
