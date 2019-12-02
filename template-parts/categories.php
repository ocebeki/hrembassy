<?php 
    if (get_the_category()) {
        echo '<div class="categories">';
        
        foreach((get_the_category()) as $category){
            if ($category->name != 'Wszystkie') {
                echo '<a class="categories__item" href="'. esc_url( get_category_link( $category->term_id ) ) .'">'.$category->name.'</a>';
            } 
        }
        
        echo '</div>';
    }
?>