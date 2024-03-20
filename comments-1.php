<section id="comments">
    <?php

    // Lista de comentários
    wp_list_comments(
        [
            'avatar_size' => 64, // Tamanho do avatar
            'style' => 'div' // Estilo da lista
        ]
    );

    // Formulário de comentário
    if (comments_open()) {
        comment_form();
    }
    ?>
</section>