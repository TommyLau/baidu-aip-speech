<?php

namespace TommyLau\BaiduAipSpeech;

class BaiduAipSpeech
{

    // Automatic Speech Recognition
    public static function asr($speech, $format = 'amr', $rate = '8000', $lan = 'zh')
    {
        $aipSpeech = new AipSpeech(
            config('baidu.aip.app_id'),
            config('baidu.aip.api_key'),
            config('baidu.aip.secret_key')
        );

        $options = [
            // Language: 'zh', 'ct', 'en' for Chinese, Cantonese, English
            'lan' => $lan
        ];

        $response = $aipSpeech->asr($speech, $format, $rate, $options);

        if ($response['err_no'] == 0) {
            return $response['result'];
        } else {
            return '';
        }
    }

    public static function synthesis($text, $lang = 'zh', $ctp = 1)
    {
        $aipSpeech = new AipSpeech(
            config('baidu.aip.app_id'),
            config('baidu.aip.api_key'),
            config('baidu.aip.secret_key')
        );

        $options = [
            // 0为女声，1为男声，3为情感合成-度逍遥，4为情感合成-度丫丫，默认为普通女
            'per' => 0,
        ];

        $response = $aipSpeech->synthesis($text, $lang, $ctp, $options);

        if (!is_array($response)) {
            $filename = 'voice/' . uniqid(mt_rand(), true) . '.mp3';
            file_put_contents($filename, $response);
            return $filename;
        } else {
            return $response;
        }
    }

}
