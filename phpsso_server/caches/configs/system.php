<?php
return array(
//��վ·��
'web_path' => '/phpcms/phpsso_server/',
//Session����
'session_storage' => 'mysql',
'session_ttl' => 1800,
'session_savepath' => CACHE_PATH.'sessions/',
'session_n' => 0,

//Cookie����
'cookie_domain' => '', //Cookie ������
'cookie_path' => '/', //Cookie ����·��
'cookie_pre' => 'wcyki_', //Cookie ǰ׺��ͬһ�����°�װ����ϵͳʱ�����޸�Cookieǰ׺
'cookie_ttl' => 0, //Cookie �������ڣ�0 ��ʾ�����������

'js_path' => 'http://localhost/phpcms/phpsso_server/statics/js/', //CDN JS
'css_path' => 'http://localhost/phpcms/phpsso_server/statics/css/', //CDN CSS
'img_path' => 'http://localhost/phpcms/phpsso_server/statics/images/', //CDN img
'upload_path' => PHPCMS_PATH.'uploadfile/', //�ϴ��ļ�·��
'app_path' => 'http://localhost/phpcms/phpsso_server/',//��̬�������õ�ַ

'charset' => 'gbk', //��վ�ַ���
'timezone' => 'Etc/GMT-8', //��վʱ����ֻ��php 5.1���ϰ汾��Ч����Etc/GMT-8 ʵ�ʱ�ʾ���� GMT+8
'debug' => 1, //�Ƿ���ʾ������Ϣ
'admin_log' => 0, //�Ƿ��¼��̨������־
'errorlog' => 0, //�Ƿ񱣴������־
'gzip' => 1, //�Ƿ�Gzipѹ�������
'auth_key' => 'bb9dAlhK9NZmq8NXu8KL', // //Cookie��Կ
'lang' => 'zh-cn',  //��վ���԰�
'admin_founders' => '1', //��վ��ʼ��ID�����ID���ŷָ�
'execution_sql' => 0, //EXECUTION_SQL
//UCenter���ÿ�ʼ
'ucuse'=>'0',//�Ƿ���UC
'uc_api'=>'http://localhost/comsenz/uc',//Ucenter api ��ַ
'uc_ip'=>'',//Ucenter api IP
'uc_dbhost'=>'localhost',//Ucenter ���ݿ�������
'uc_dbuser'=>'root',//Ucenter ���ݿ��û���
'uc_dbpw'=>'root',//Ucenter ���ݿ�����
'uc_dbname'=>'ucenter',//Ucenter ���ݿ���
'uc_dbtablepre'=>'uc_',//Ucenter ���ݿ��ǰ׺
'uc_dbcharset'=>'gbk',//Ucenter ���ݿ��ַ���
'uc_appid'=>'',//Ӧ��id(APP ID)
'uc_key'=>'',//Ucenter ͨ����Կ
);
?>