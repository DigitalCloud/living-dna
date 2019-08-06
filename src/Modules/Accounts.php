<?php


namespace DigitalCloud\LivingDna\Modules;


use DigitalCloud\LivingDna\Objects\Account;
use Illuminate\Support\Arr;

class Accounts extends Client
{
    /**
     * @param Account $account
     * @return Account
     */
    public function create(Account $account)
    {
        $data = self::send('post', 'api/account', json_encode($account));

        $account->setId(Arr::get($data, "id"));

        return $account;
    }

    /**
     * @param Account $account
     */
    public function link(Account $account)
    {
        self::send('post', 'api/account/link', json_encode([
            'user_id' => $account->getId(),
            "partner_user_id" => $account->getPartnerUserId()
        ]));
    }
}