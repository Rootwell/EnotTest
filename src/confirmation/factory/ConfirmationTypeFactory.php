<?php

abstract class ConfirmationTypeFactory
{
    abstract public function factoryMethod(): ConfirmationType;

    public function proceedConfirmation(): ConfirmationResult {
        // some specific base logic
        return $this->factoryMethod()->confirmationProcess();
    }
}