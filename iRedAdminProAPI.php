<?php

/**
 * PHP iRedAdminPro API Class.
 * @author Tim Bezlaj <tim@bezlaj.com>
 */
 
class iRedAdminProAPI {
  private $data = array();

  public function get_login ($API_HOST, $USERNAME, $PASSWORD) {
      $curl = curl_init();
      $data = array('username'=>$USERNAME, 'password'=>$PASSWORD);
      $post = http_build_query($data);

      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/login",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_SSL_VERIFYPEER=>false,
        CURLOPT_RETURNTRANSFER=>true,
        CURLOPT_COOKIEJAR=>dirname(__FILE__) . "/cookies.txt",
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_domain ($API_HOST, $DOMAIN) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/domain/$DOMAIN",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_admin ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/admin/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_user ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/user/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_maillist ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/maillist/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_alias ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/alias/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_global_spampolicy ($API_HOST) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/spampolicy/global",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_domain_spampolicy ($API_HOST, $DOMAIN) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/spampolicy/domain/$DOMAIN",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_user_spampolicy ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/spampolicy/user/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_global_inbound_throttle ($API_HOST) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/global/inbound",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_global_outbound_throttle ($API_HOST) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/global/outbound",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_domain_inbound_throttle ($API_HOST, $DOMAIN) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/$DOMAIN/inbound/",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_domain_outbound_throttle ($API_HOST, $DOMAIN) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/$DOMAIN/outbound/",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_user_inbound_throttle ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/$MAIL/inbound/",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_user_outbound_throttle ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/$MAIL/outbound/",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_ldif_domain ($API_HOST, $DOMAIN) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/ldif/domain/$DOMAIN",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_ldif_catchall ($API_HOST, $DOMAIN) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/ldif/catchall/$DOMAIN",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_ldif_admin ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/ldif/admin/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_ldif_user ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/ldif/user/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_ldif_maillist ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/ldif/maillist/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function get_ldif_alias ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/ldif/alias/$MAIL",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function create_admin ($API_HOST, $MAIL, $name, $password, $accountStatus, $language, $isGlobalAdmin) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'name'=>$name, 
        'password'=>$password,
        'accountStatus'=>$accountStatus,
        'language'=>$language,
        'isGlobalAdmin'=>$isGlobalAdmin
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/admin/$MAIL",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function create_domain ($API_HOST, $DOMAIN, $NAME, $QUOTA, $LANGUAGE, $DEFAULT_QUOTA, $MAX_QUOTA, $MAX_USER_QUOTA, $MAX_USERS, $MAX_ALIASES, $MAX_LISTS, $SENDER_BCC, $RECIPIENT_BCC) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'name'=>$NAME, 
        'quota'=>$QUOTA,
        'language'=>$LANGUAGE,
        'transport'=>'dovecot',
        'defaultQuota'=>$DEFAULT_QUOTA,
        'maxUserQuota'=>$MAX_QUOTA,
        'numberOfUsers'=>$MAX_USER_QUOTA,
        'numberOfAliases'=>$MAX_USERS,
        'numberOfLists'=>$MAX_LISTS,
        'senderBcc'=>$SENDER_BCC,
        'recipientBcc'=>$RECIPIENT_BCC
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/domain/$DOMAIN",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function create_maillist ($API_HOST, $MAIL, $name, $accessPolicy, $members) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'name'=>$name, 
        'accessPolicy'=>$accessPolicy,
        'members'=>$members
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/maillist/$MAIL",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function create_alias ($API_HOST, $MAIL, $name, $accessPolicy, $members) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'name'=>$name, 
        'accessPolicy'=>$accessPolicy,
        'members'=>$members
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/alias/$MAIL",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function delete_domain ($API_HOST, $DOMAIN, $DAYS = NULL) {
      $curl = curl_init();
      if (!is_null($DAYS) && is_numeric($DAYS)) {
        curl_setopt($curl, CURLOPT_URL, "$API_HOST/domain/$DOMAIN/keep_mailbox_days/$DAYS");
      } else {
        curl_setopt($curl, CURLOPT_URL, "$API_HOST/domain/$DOMAIN");
      }
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function delete_admin ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/admin/$MAIL",
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function delete_user ($API_HOST, $MAIL, $DAYS = NULL) {
      $curl = curl_init();
      if (!is_null($DAYS) && is_numeric($DAYS)) {
        curl_setopt($curl, CURLOPT_URL, "$API_HOST/user/$MAIL/keep_mailbox_days/$DAYS");
      } else {
        curl_setopt($curl, CURLOPT_URL, "$API_HOST/user/$MAIL");
      }
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function delete_maillist ($API_HOST, $MAIL) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/maillist/$MAIL",
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function update_admin_parameter ($API_HOST, $MAIL, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/admin/$MAIL",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function update_domain_parameter ($API_HOST, $DOMAIN, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/domain/$DOMAIN",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function update_user_parameter ($API_HOST, $MAIL, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/user/$MAIL",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function update_users_parameter ($API_HOST, $DOMAIN, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/users/$DOMAIN",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function update_maillist_parameter ($API_HOST, $MAIL, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/maillist/$MAIL",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function update_alias_parameter ($API_HOST, $MAIL, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/alias/$MAIL",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_global_spampolicy ($API_HOST, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/spampolicy/global",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_domain_spampolicy ($API_HOST, $DOMAIN, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/spampolicy/domain/$DOMAIN",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_user_spampolicy ($API_HOST, $MAIL, $parameter, $parameter_value) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        $parameter => $parameter_value
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/spampolicy/user/$MAIL",
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_global_throttle_inbound ($API_HOST, $period, $msg_size, $max_msgs, $max_quota) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'period' => $period,
        'msg_size' => $msg_size,
        'max_msgs' => $max_msgs,
        'max_quota' => $max_quota
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/global/inbound",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_global_throttle_outbound ($API_HOST, $period, $msg_size, $max_msgs, $max_quota) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'period' => $period,
        'msg_size' => $msg_size,
        'max_msgs' => $max_msgs,
        'max_quota' => $max_quota
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/global/outbound",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_domain_throttle_inbound ($API_HOST, $DOMAIN, $period, $msg_size, $max_msgs, $max_quota) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'period' => $period,
        'msg_size' => $msg_size,
        'max_msgs' => $max_msgs,
        'max_quota' => $max_quota
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/$DOMAIN/inbound",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_domain_throttle_outbound ($API_HOST, $DOMAIN, $period, $msg_size, $max_msgs, $max_quota) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'period' => $period,
        'msg_size' => $msg_size,
        'max_msgs' => $max_msgs,
        'max_quota' => $max_quota
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/$DOMAIN/outbound",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_user_throttle_inbound ($API_HOST, $MAIL, $period, $msg_size, $max_msgs, $max_quota) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'period' => $period,
        'msg_size' => $msg_size,
        'max_msgs' => $max_msgs,
        'max_quota' => $max_quota
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/$MAIL/inbound",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function set_user_throttle_outbound ($API_HOST, $MAIL, $period, $msg_size, $max_msgs, $max_quota) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'period' => $period,
        'msg_size' => $msg_size,
        'max_msgs' => $max_msgs,
        'max_quota' => $max_quota
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/throttle/$MAIL/outbound",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function create_user ($API_HOST, $MAIL, $NAME, $PASSWORD, $LANGUAGE, $QUOTA) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'name'=>$NAME, 
        'password'=>$PASSWORD,
        'language'=>$LANGUAGE,
        'quota'=>$QUOTA
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/user/$MAIL",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function change_email ($API_HOST, $MAIL, $MAIL_NEW) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/user/$MAIL/change_email/$MAIL_NEW",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function change_alias ($API_HOST, $MAIL, $MAIL_NEW) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/alias/$MAIL/change_email/$MAIL_NEW",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function verify_password ($API_HOST, $MAIL, $PASSWORD) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'password'=>$PASSWORD
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/verify_password/user/$MAIL",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }

  public function verify_admin_password ($API_HOST, $MAIL, $PASSWORD) {
      $curl = curl_init();
      if (!defined('COOKIE_FILE')) { define("COOKIE_FILE", dirname(__FILE__) . "/cookies.txt"); }
      $data = array(
        'password'=>$PASSWORD
        );
      $post = http_build_query($data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => "$API_HOST/verify_password/admin/$MAIL",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEJAR => COOKIE_FILE,
        CURLOPT_COOKIEFILE => COOKIE_FILE
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $iredmail_response = json_decode($response);
      return $iredmail_response;
  }
  
}
