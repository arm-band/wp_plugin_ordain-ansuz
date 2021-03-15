<?php
/*
Plugin Name: Ordain ᚨ
Description: 検索結果を日付降順に変更する簡易なプラグイン。
Version: 0.0.1
Author: アルム＝バンド
*/

/**
 * ordainAnsuz (ᚨ) : 検索結果を日付降順に変更する
 */
class ordainAnsuz
{
    /**
     * __construct : コンストラクタ
     *
     */
     public function __construct() {
        add_filter(
            'posts_search_orderby',
            [
                $this,
                'jera',
            ]
        );
    }
    /**
     * jera (ᛃ) : 日付降順にする
     *
     * @return {string} 'post_date desc' : 日付降順を指定する ORCER BY句 の一部
     *
     */
    public function jera ()
    {
        return 'post_date desc';
    }
}

// instantiate
$ab_wp_plugin_ordainAnsuz = new ordainAnsuz();
