# Synch DB

mysql -uroot -p < scripts/database.sql

vendor/bin/doctrine-module orm:generate:proxies library/Reservation/Proxy

php -S 0.0.0.0:80  -t public                                                         

                                                                                                                                                         