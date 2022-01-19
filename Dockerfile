FROM oguzzarci/phplaravelbaseimage
COPY . .
RUN cp ./.env.example ./.env
RUN composer install
RUN npm install
RUN npm run production
CMD php artisan serve --host=0.0.0.0 --port=80
EXPOSE 80
ENTRYPOINT ["./run.sh"]
RUN chmod +x ./run.sh