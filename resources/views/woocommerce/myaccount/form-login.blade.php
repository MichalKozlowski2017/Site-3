<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
@extends('layouts.app')
@section('content')

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<section class="my-account form-login">
  <div class="content-container">

    <?php wc_print_notices(); ?>

    <div class="content-container__wrapper white-container white-container--transparent form-login__wrapper">

      <div class="content-box--white content-box">
        <div class="content-box__title">
          <?php esc_html_e( 'Login', 'woocommerce' ); ?>
        </div>

        <form class="" method="post">
          <?php do_action( 'woocommerce_login_form_start' ); ?>
          <div class="form-element">
            <label for="username">
              <?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
              <input type="text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
            <?php // @codingStandardsIgnoreLine ?>
          </div>

          <div class="form-element">
            <label for="password">
              <?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
            <input type="password" name="password" id="password" autocomplete="current-password" />
          </div>
          <?php do_action( 'woocommerce_login_form' ); ?>

          <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>


          <div class="login-submit">
            <button class="btn btn--yellow" type="submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">
                <?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
            <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="btn btn--noborderform">
              <?php esc_html_e( 'Nie możesz się zalogować?', '--nazwa-firmy--' ); ?>
            </a>
          </div>

          <div class="form-element form-element--checkbox">

              <input name="rememberme" type="checkbox" id="rememberme" value="forever" class="styled-checkbox"/>
              <label for="rememberme"><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></label>
          </div>


          <?php do_action( 'woocommerce_login_form_end' ); ?>
        </form>
      </div>


      <?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
        <div class="content-box--white content-box">

          <div class="content-box__title">
            <?php esc_html_e( 'Register', 'woocommerce' ); ?>
          </div>


          <form method="post" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

            <?php do_action( 'woocommerce_register_form_start' ); ?>
            <div class="form-element">
            <label for="reg_email">
              <?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
            <input type="email" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
            <?php // @codingStandardsIgnoreLine ?>
            </div>
            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

            <label for="reg_password">
              <?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
            <input type="password" name="password" id="reg_password" autocomplete="new-password" />

            <?php endif; ?>

            <?php do_action( 'woocommerce_register_form' ); ?>

            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
            <button class="btn btn--white" type="submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">
              <?php esc_html_e( 'Stwórz konto', 'woocommerce' ); ?></button>
            <?php do_action( 'woocommerce_register_form_end' ); ?>

          </form>
        </div>
      <?php endif; ?>

      <?php do_action( 'woocommerce_after_customer_login_form' ); ?>
    </div>
  </div>
</section>

