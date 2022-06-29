<?php

class EmailConfirmationFactory extends ConfirmationTypeFactory
{

    public function factoryMethod(): ConfirmationType
    {
        // concrete logic
        return new EmailConfirmation();
    }

    public function proceedConfirmation(): ConfirmationResult
    {
        //concrete logic if needed
        return parent::proceedConfirmation();
    }
}