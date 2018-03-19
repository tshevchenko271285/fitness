<?php

class Fitness_WP_Widget_Categories extends WP_Widget {

    /**
     * Sets up a new Categories widget instance.
     *
     * @since 2.8.0
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'blog-categories',
            'description' => __( 'A list categories for fitness theme.' ),
            'customize_selective_refresh' => true,
        );
        parent::__construct( 'fitness_categories', __( 'Categories Fitness' ), $widget_ops );
    }

    /**
     * Outputs the content for the current Categories widget instance.
     *
     * @since 2.8.0
     *
     * @staticvar bool $first_dropdown
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Categories widget instance.
     */
    public function widget( $args, $instance ) {
        static $first_dropdown = true;

        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Categories' );

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );


        echo $args['before_widget'];

        if ( $title ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $cat_args = array(
            'orderby'      => 'name',
            'hide_empty'   => 0,
        );
        ?>
            <?php
            $cat_args['title_li'] = '';

            /**
             * Filters the arguments for the Categories widget.
             *
             * @since 2.8.0
             * @since 4.9.0 Added the `$instance` parameter.
             *
             * @param array $cat_args An array of Categories widget options.
             * @param array $instance Array of settings for the current widget.
             */
            wp_list_categories( apply_filters( 'widget_categories_args', $cat_args, $instance ) );
            ?>
        <?php

        echo $args['after_widget'];
    }

    /**
     * Handles updating settings for the current Categories widget instance.
     *
     * @since 2.8.0
     *
     * @param array $new_instance New settings for this instance as input by the user via
     *                            WP_Widget::form().
     * @param array $old_instance Old settings for this instance.
     * @return array Updated settings to save.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['count'] = !empty($new_instance['count']) ? 1 : 0;
        $instance['hierarchical'] = !empty($new_instance['hierarchical']) ? 1 : 0;
        $instance['dropdown'] = !empty($new_instance['dropdown']) ? 1 : 0;

        return $instance;
    }

    /**
     * Outputs the settings form for the Categories widget.
     *
     * @since 2.8.0
     *
     * @param array $instance Current settings.
     */
    public function form( $instance ) {
        //Defaults
        $instance = wp_parse_args( (array) $instance, array( 'title' => '') );
        $title = sanitize_text_field( $instance['title'] );
//        $count = isset($instance['count']) ? (bool) $instance['count'] :false;
//        $hierarchical = isset( $instance['hierarchical'] ) ? (bool) $instance['hierarchical'] : false;
//        $dropdown = isset( $instance['dropdown'] ) ? (bool) $instance['dropdown'] : false;
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>
        <?php
    }

}
function fitness_categories_widget_load() {
    register_widget( 'Fitness_WP_Widget_Categories' );
}
add_action( 'widgets_init', 'fitness_categories_widget_load' );