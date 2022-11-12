from flask import Flask
from flask import render_template, jsonify, request

# === use dotenv to config environment ============
from dotenv import load_dotenv, find_dotenv

# === import sql from Flask =========
from flask_mysqldb import MySQL
import os

# === start application with Flask =========
app = Flask(__name__)
app.secret_key = '2HKT'
load_dotenv(find_dotenv())

# === config mysqldb ============
app.config["MYSQL_HOST"] = os.environ.get("HOST")
app.config["MYSQL_USER"] = os.environ.get("USER")
app.config["MYSQL_PASSWORD"] = os.environ.get("PASSWORD")
app.config["MYSQL_DB"] = os.environ.get("DATABASE")
mysql = MySQL(app)


@app.route("/create_account", methods=['GET', 'POST'])
def show_screen_create_account():
    return render_template('create_account.html')


@app.route("/login", methods=['GET', 'POST'])
def show_screen_login():
    return render_template('login.html')


@app.route("/homepage", methods=['GET', 'POST'])
def show_screen_homepage():
    return render_template('homepage.html')


# === Config the port ==============================
if __name__ == "__main__":
    app.run(debug=True, port=5000, host='0.0.0.0')
