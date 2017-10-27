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
}
