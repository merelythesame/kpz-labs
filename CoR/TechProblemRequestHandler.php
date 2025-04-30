<?php

namespace CoR;

class TechProblemRequestHandler extends AbstractSupportHandler
{
    public function getQuestion(): ?array
    {
        return [
            'question' => 'Is it your home internet or mobile data?',
            'options' => [
                1 => 'Mobile data',
                2 => 'Home internet',
            ]
        ];
    }

    public function handle(?int $choice): ?string
    {
        if ($choice === 1) {
            return 'We are working on it!';
        }
        return parent::handle($choice);
    }
}
