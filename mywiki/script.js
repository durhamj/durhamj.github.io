// JavaScript to manage content and interactions

document.addEventListener('DOMContentLoaded', function () {
    // Load content on the homepage
    if (document.body.id === 'index') {
        const content = localStorage.getItem('wikiContent') || '<h1>Welcome to MyWiki</h1><p>This is the home page.</p>';
        document.getElementById('content').innerHTML = content;
    }
    
    // Initialize Summernote on the edit page
    if (document.body.id === 'edit') {
        $('#summernote').summernote({
            height: 300,
            callbacks: {
                onInit: function() {
                    // Load content into the editor
                    const content = localStorage.getItem('wikiContent') || '<h1>Welcome to MyWiki</h1><p>This is the home page.</p>';
                    $('#summernote').summernote('code', content);
                }
            }
        });
    }
});

function saveContent() {
    const content = $('#summernote').summernote('code');
    localStorage.setItem('wikiContent', content);
    window.location.href = 'index.html';
}
