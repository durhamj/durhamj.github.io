from flask import Flask, render_template, request, redirect, url_for
from flask import jsonify

app = Flask(__name__)

# Dummy content storage
content_storage = {
    'home': '<h1>Welcome to MyWiki</h1><p>This is the home page.</p>'
}

@app.route('/')
def index():
    return render_template('index.html', content=content_storage.get('home', ''))

@app.route('/edit', methods=['GET', 'POST'])
def edit():
    if request.method == 'POST':
        content_storage['home'] = request.form['content']
        return redirect(url_for('index'))
    return render_template('edit.html', content=content_storage.get('home', ''))

if __name__ == '__main__':
    app.run(debug=True)
