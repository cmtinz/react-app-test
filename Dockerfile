FROM node:8.10.0-alpine
EXPOSE 3000 9229
COPY . /home/app
COPY init.sql /docker-entrypoint-initdb.d/
WORKDIR /home/app
RUN npm install
CMD ./scripts/start.sh