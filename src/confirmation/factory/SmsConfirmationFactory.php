<?php

class SmsConfirmationFactory extends ConfirmationTypeFactory
{

    public function factoryMethod(): ConfirmationType
    {
        // concrete logic
        return new SmsConfirmation();
    }

    public function proceedConfirmation(): ConfirmationResult
    {
        //concrete logic if needed
        return parent::proceedConfirmation();
    }
}