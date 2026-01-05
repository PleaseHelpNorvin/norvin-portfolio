<?php

namespace App\Services;

class CaptchaService
{
    /* ===============================
     |  PUBLIC API
     =============================== */

    public function generate(): array
    {
        $types = ['math', 'char', 'logic'];
        $type  = $types[array_rand($types)];

        [$question, $answer] = match ($type) {
            'math'  => $this->mathCaptcha(),
            'char'  => $this->charCaptcha(),
            'logic' => $this->logicCaptcha(),
        };

        session()->put('captcha_answer', strtolower((string) $answer));

        return [
            'type'     => $type,
            'question' => $question,
        ];
    }

    public function verify(string $input): bool
    {
        if (config('captcha.bypass')) {
            return true;
        }

        $answer = session('captcha_answer');

        return $answer !== null
            && strtolower(trim($input)) === $answer;
    }

    public function refresh(): array
    {
        return $this->generate();
    }

    /* ===============================
     |  CAPTCHA TYPES
     =============================== */

    protected function mathCaptcha(): array
    {
        $a = rand(1, 9);
        $b = rand(1, 9);
        $op = rand(0, 1) ? '+' : '-';

        $question = "$a $op $b = ?";
        $answer   = $op === '+' ? $a + $b : $a - $b;

        return [$question, $answer];
    }

    protected function charCaptcha(): array
    {
        $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
        $code  = substr(str_shuffle($chars), 0, 5);

        return ["Type these characters: $code", $code];
    }

    protected function logicCaptcha(): array
    {
        $questions = $this->logicQuestions();
        $pick = $questions[array_rand($questions)];

        return [$pick['question'], $pick['answer']];
    }


    protected function logicQuestions(): array
    {
        return [
            ['question' => 'Which number is larger: 4, 9, 2', 'answer' => '9'],
            ['question' => 'What comes after 12?', 'answer' => '13'],
            ['question' => 'Which is smaller: 10 or 6?', 'answer' => '6'],
            ['question' => 'What is 3 + 6?', 'answer' => '9'],
            ['question' => 'Which is even: 7, 5, 8?', 'answer' => '8'],
            ['question' => 'What comes next: 2, 4, 6, ?', 'answer' => '8'],
            ['question' => 'Which comes first alphabetically: mango, apple, banana?', 'answer' => 'apple'],
            ['question' => 'What is 10 - 4?', 'answer' => '6'],
            ['question' => 'Which is odd: 2, 4, 9?', 'answer' => '9'],
            ['question' => 'Which shape has 3 sides: square, triangle, circle?', 'answer' => 'triangle'],

            ['question' => 'What comes before 20?', 'answer' => '19'],
            ['question' => 'Which is greater: 15 or 11?', 'answer' => '15'],
            ['question' => 'What comes next: 5, 10, 15, ?', 'answer' => '20'],
            ['question' => 'Which is a fruit: chair, apple, table?', 'answer' => 'apple'],
            ['question' => 'Which number is missing: 1, ?, 3', 'answer' => '2'],
            ['question' => 'Which is smaller: 3, 7, 9?', 'answer' => '3'],
            ['question' => 'What is 6 + 2?', 'answer' => '8'],
            ['question' => 'Which is a color: dog, blue, car?', 'answer' => 'blue'],
            ['question' => 'Which comes first: C, A, B?', 'answer' => 'A'],
            ['question' => 'What comes next: 1, 3, 5, ?', 'answer' => '7'],

            ['question' => 'Which number is even: 11, 14, 9?', 'answer' => '14'],
            ['question' => 'What is 9 - 3?', 'answer' => '6'],
            ['question' => 'Which is not a number: 2, five, 7?', 'answer' => 'five'],
            ['question' => 'Which comes next: 10, 20, 30, ?', 'answer' => '40'],
            ['question' => 'Which is larger: 100 or 99?', 'answer' => '100'],
            ['question' => 'What comes before A?', 'answer' => 'Z'],
            ['question' => 'Which is a letter: 3, B, 7?', 'answer' => 'B'],
            ['question' => 'Which is smaller: 1 or 0?', 'answer' => '0'],
            ['question' => 'What is 4 + 4?', 'answer' => '8'],
            ['question' => 'Which is a day: Monday, apple, blue?', 'answer' => 'Monday'],
        ];
    }
}
