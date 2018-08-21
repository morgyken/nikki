
function deleteBlogArticle(articleId) {
    /* we use ajax post to remove questions */
    if (confirm('Are you sure you want to remove this article?')) {
        $.ajax({
            url: '/blog/articles/' + articleId + '/delete/',
            type: 'POST',
            success: function () {
                window.location.href = '/blog/';
            }
        });
    }
}
