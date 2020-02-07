<article <?php post_class('w-1/2 px-8') ?>>
  @php $images = get_field('header_images') @endphp
    @if( $images )
      @php $image_1 = $images[0] @endphp
      <a href="<?php the_permalink(); ?>">
          <img src="<?php echo $images[0]['sizes']['large']; ?>" alt="<?php echo $images[0]['alt']; ?>" style="width:100%;" />
      </a>
    @endif
</article>
