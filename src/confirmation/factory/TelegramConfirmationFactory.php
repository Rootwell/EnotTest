<?php

class TelegramConfirmationFactory extends ConfirmationTypeFactory
{

    public function factoryMethod(): ConfirmationType
    {
        // concrete logic
        return new TelegramConfirmation();
    }

    public function proceedConfirmation(): ConfirmationResult
    {
        //concrete logic if needed
        return parent::proceedConfirmation();
    }
}