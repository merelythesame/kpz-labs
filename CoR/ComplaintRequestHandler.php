<?php

namespace CoR;

class ComplaintRequestHandler extends AbstractSupportHandler
{
    public function getQuestion(): ?array
    {
        return [
            'question' => 'Do you want to leave a complaint?',
            'options' => [
                1 => 'Yes',
                2 => 'No',
            ]
        ];
    }

    public function handle(?int $choice): ?string
    {
        if ($choice === 1) {
            return 'Level 4 - Administrative Support';
        }
        return parent::handle($choice);
    }
}