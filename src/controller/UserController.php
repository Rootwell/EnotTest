<?php

class UserController
{

    public function changeConfirmationType(SomeRequest $request): SomeResponse
    {
        $user = DI::user(); // or another way to use current user

        $confFactoryProvider = new ConfirmationFactoryProvider();

        $concreteFactory = $confFactoryProvider->getFactoryByName($request->get('confirmationType'));
        $newConfirmationType = $concreteFactory->factoryMethod();

        if ($this->getUserConfirmationType($user)->confirmationProcess()->isPassed()) {
            $user->setConfirmationType($newConfirmationType);
            $user->save();
        }

        return new SomeResponse();
    }

    public function changeSetting(SomeRequest $request): SomeResponse
    {
        $user = DI::user();

        $userSetting = new UserSetting($request->get('settingName'), $request->get('settingValue'));

        if ($this->getUserConfirmationType($user)->confirmationProcess()->isPassed()) {
            $user->addSetting($userSetting);
            $user->save();
        }

        return new SomeResponse();
    }

    private function getUserConfirmationType(User $user): ConfirmationType
    {
        $confirmationType = $user->getConfirmationType();

        $confFactoryProvider = new ConfirmationFactoryProvider();

        return $confFactoryProvider->getFactoryByName($confirmationType)->factoryMethod();
    }
}