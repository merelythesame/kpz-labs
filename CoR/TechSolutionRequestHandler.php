<?php

namespace CoR;

class TechSolutionRequestHandler extends AbstractSupportHandler
{
    public function getQuestion(): ?array
    {
        return [
            'question' => 'Have you restarted router?',
            'options' => [
                1 => 'Yes',
                2 => 'No',
            ]
        ];
    }

    public function handle(?int $choice): ?string
    {
        if ($choice === 1) {
            return 'We see you router. You will be connected soon.';
        }
        return parent::handle($choice);
    }
}