<?php

interface ConfirmationType
{
    function confirmationProcess(): ConfirmationResult;
}