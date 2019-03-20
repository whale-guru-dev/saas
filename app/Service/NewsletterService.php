<?php

namespace App\Service;


use App\Consts\NewsletterConsts;
use App\Models\Newsletter;


class NewsletterService
{

    public function register($email)
    {

        $email = strtolower(trim($email));

        if (!empty($email)) {

            $record = Newsletter::where('email', $email)->first();

            if (empty($record)) {

                $record = new Newsletter();
                $record->email = $email;

                if ($record->save()) {

                    return [
                        'status' => 'success',
                        'code' => NewsletterConsts::EMAIL_ADDED,
                        'message' => trans('saas.newsletter.email_added')
                    ];

                }

                return [
                    'status' => 'success',
                    'code' => NewsletterConsts::ERROR,
                    'message' => trans('saas.newsletter.error')
                ];
            }

            return [
                'status' => 'danger',
                'code' => NewsletterConsts::ALREADY_REGISTERED,
                'message' => trans('saas.newsletter.already_registered')
            ];

        }

        return [
            'status' => 'danger',
            'code' => NewsletterConsts::EMPTY_EMAIL,
            'message' => trans('saas.newsletter.empty_email')
        ];

    }

}