<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{

    public function generate(): \Generator
    {
        $emojis = [
            "\u{1F680}",
            "\u{1F683}",
            "\u{1F684}",
            "\u{1F685}",
            "\u{1F687}",
        ];

        for ($i = 0, $n = count($emojis); $i < $n; $i++) {
            yield $emojis[$i];
        }
    }
}