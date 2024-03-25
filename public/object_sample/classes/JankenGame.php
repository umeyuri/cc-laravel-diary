<?php
class JankenGame {

    private $pc_hand;

    public function __construct() {
        $this->pc_hand = $this->random_pc_hand();
    }

    private function random_pc_hand() {
        $hands = ['グー', 'チョキ', 'パー'];
        $random_key = array_rand($hands, 1);
        return $hands[$random_key];
    }

    public function getHand() {
        return $this->pc_hand;
    }

    public function janken_game($user_hand) {

        if ($this->pc_hand === 'グー' && $user_hand === 'パー' || $this->pc_hand === 'チョキ' && $user_hand === 'グー' || $this->pc_hand === 'パー' && $user_hand === 'チョキ') {
            $result = 'Win!';
        }elseif ($this->pc_hand === $user_hand) {
            $result = 'あいこ';
        }else {
            $result = '負け';
        }
        return $result;
    }
}