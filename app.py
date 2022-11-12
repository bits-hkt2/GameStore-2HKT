from flask import Flask
from flask import render_template, jsonify, request

import random

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


@app.route("/sign_in", methods=['GET', 'POST'])
def show_screen_sign_in():
    return render_template('sign_in.html')


@app.route("/login", methods=['GET', 'POST'])
def show_screen_login():
    return render_template('login.html')


@app.route("/homepage", methods=['GET', 'POST'])
def show_screen_homepage():
    return render_template('homepage.html')


@app.route("/cart", methods=['GET', 'POST'])
def show_screen_cart():
    return render_template('cart.html')


# === Config the port ==============================
if __name__ == "__main__":
    port = 5000 + random.randint(0, 999)
    print(port)
    url = "http://127.0.0.1:{0}".format(port)
    print(url)
    app.run(use_reloader=False, debug=True, port=port)
