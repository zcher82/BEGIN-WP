<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Shortcode attributes
 * @var $el_class
 * @var $css
 * @var $title
 * @var $style
 * @var $line_color
 * @var $output
 */
$ani=$aos_once=$aos_delay=$aos=$el_class=$css=$title=$style=$line_color=$title_color=$output=$output_el_class='';
$atts = vc_map_get_attributes( 'om_title', $atts );
extract( $atts );

if($ani != 'none')
    $aos="data-aos='$ani' data-aos-once='$aos_once' data-aos-delay='$aos_delay'";

if ( '' !== $el_class ) {
        $output_el_class = ' ' . str_replace( '.', '', $el_class );
}
$wrapper_classes = array(
	$output_el_class,
);
$class_to_filter = implode( ' ', array_filter( $wrapper_classes ) );
$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, 'om_title', $atts );

$bg_styles= 'style="'.vc_get_css_color( 'background-color', $line_color ).'"';
$bd_styles= 'style="'.vc_get_css_color( 'border-color', $line_color ).vc_get_css_color( 'color', $title_color ).'"';

echo '<style>.title .heading h2:before, .heading h2:after{border-color:'.$line_color.'}</style>';
echo '<style>.title .heading2 h2:before, .heading2 h2:after{border-color:'.$line_color.'}</style>';

$output.='<div '.$aos.' class="title om-width '.trim( esc_attr( $css_class ) ).'">';
if($style==='a'){
    $output.='<div class="prompt_text"><p class="section-title-font" style="color:'.esc_attr($title_color).';">'.esc_html($title).'</p><p class="prompt_text_title" '.$bg_styles.'></p></div>';
}elseif ($style==='b'){
    $output.='<div class="title"><div class="heading heading-v1"><h2 class="section-title-font" style="color:'.esc_attr($title_color).';">'.esc_html($title).'</h2></div></div>';
}elseif ($style==='c') {
    $output.='<div class="prompt_text3 section-title-font" style="color:'.esc_attr($title_color).'; background-color:'.esc_attr($line_color).';border: 3px solid '.esc_attr($title_color).';box-shadow:'.esc_attr($line_color).' 0px 0px 0px 3px;">'.esc_html($title).'</div>';
}elseif ($style==='d'){
    $output.='<div class="title"><div class="heading2 heading-v12"><h2 class="section-title-font" style="color:'.esc_attr($title_color).';">'.esc_html($title).'</h2></div></div>';
}else{
    $output.='<div class="prompt_text5_ma om-title5"><span class="section-title-font prompt_text5" '.$bd_styles.'>'.esc_html($title).'</span></div>';
}
$output.='</div>';
