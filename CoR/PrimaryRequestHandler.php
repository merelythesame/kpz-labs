<?php

namespace CoR;

class PrimaryRequestHandler extends AbstractSupportHandler
{
    public function getQuestion(): ?array
    {
        return [
            'question' => 'How can i help you?',
            'options' => [
                1 => 'Balance',
                2 => 'Connection problem',
            ]
        ];
    }

    public function handle(?int $choice): ?string
    {
        if ($choice === 1) {
            return 'Your balance';
        }
        return parent::handle($choice);
    }

}

