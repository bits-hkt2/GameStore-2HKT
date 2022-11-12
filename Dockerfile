FROM python:3-alpine

WORKDIR /application

COPY ./config/requirements.txt requirements.txt

RUN apk update && apk add python3-dev mariadb-dev build-base
RUN pip install --upgrade pip && pip install --no-cache-dir -r requirements.txt

COPY . .

RUN export FLASK_APP=app.py

CMD ["flask", "run"]