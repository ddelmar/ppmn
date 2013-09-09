<?php

namespace Paypal;

/**
 * Class Slides
 *
 * @package Paypal
 */

class Slides
{

    public $sm_1x = '';
    public $sm_2x = '';
    public $lg_1x = '';
    public $lq_2x = '';
    public $random = 0;

    /**
     * Sets a random number between the min/max values
     *
     * @access public
     * @param int $min
     * @param int $max
     * @return void
     */

    /* not randomizing before launch per marketing team
    
    public function set_random($min = 1, $max = 1)
    {
        $this->random = rand($min, $max);
    }
    */

    /**
     * Sets the slide for the object, randomly selects an image from the array
     *
     * @access public
     * @param $slide
     * @return void
     */

    public function set_slide($slide)
    {
        $slides = $this->_slide_array();
        $slide  = $slides[$slide];
        shuffle($slide);
        $img = $slide[0];

        $this->sm_1x = $img['sm_1x'];
        $this->sm_2x = $img['sm_2x'];
        $this->lg_1x = $img['lg_1x'];
        $this->lg_2x = $img['lg_2x'];
    }

    /**
     * Returns an array of slides
     *
     * @access private
     * @return array
     */

    private function _slide_array()
    {
        return array(
            1 => array(
                0 => array(
                    'sm_1x' => '/_/media/slide-1/hero-1-small.jpg',
                    'sm_2x' => '/_/media/slide-1/hero-1-small-2x.jpg',
                    'lg_1x' => '/_/media/slide-1/hero-1-large.jpg',
                    'lg_2x' => '/_/media/slide-1/hero-1-large-2x.jpg',
                ),
                1 => array(
                    'sm_1x' => '/_/media/slide-1/hero-2-small.jpg',
                    'sm_2x' => '/_/media/slide-1/hero-2-small-2x.jpg',
                    'lg_1x' => '/_/media/slide-1/hero-2-large.jpg',
                    'lg_2x' => '/_/media/slide-1/hero-2-large-2x.jpg',
                ),
                2 => array(
                    'sm_1x' => '/_/media/slide-1/hero-3-small.jpg',
                    'sm_2x' => '/_/media/slide-1/hero-3-small-2x.jpg',
                    'lg_1x' => '/_/media/slide-1/hero-3-large.jpg',
                    'lg_2x' => '/_/media/slide-1/hero-3-large-2x.jpg',
                ),
            ),
        );
    }
}

?>