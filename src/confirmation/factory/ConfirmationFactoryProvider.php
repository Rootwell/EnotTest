<?php

class ConfirmationFactoryProvider
{
    public const TG_CONF = 'tg';
    public const EMAIL_CONF = 'email';
    public const SMS_CONF = 'sms';

    function getFactoryByName(string $name) {
        switch ($name) {
            case self::TG_CONF:
                return new TelegramConfirmationFactory();
            case self::EMAIL_CONF:
                return new EmailConfirmationFactory();
            case self::SMS_CONF:
            default:
                return new SmsConfirmationFactory();
        }
    }

}