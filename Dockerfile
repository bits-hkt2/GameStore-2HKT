FROM python:latest

WORKDIR /application

COPY ./config/requirements.txt requirements.txt

RUN apk update && apk add python3-dev mariadb-dev build-base
RUN  pip install --upgrade pip && pip install --no-cache-dir -r requirements.txt

COPY . .

CMD ["flask", "run"]