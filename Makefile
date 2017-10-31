SERVER_NAME         = $(subst _,.,$(subst -,.,$(notdir $(CURDIR))))
MYSQL_ROOT_PASSWORD = nochi0105.tk
MYSQL_DATABASE      = nochi0105.tk
MYSQL_USER          = nochi0105.tk
MYSQL_PASSWORD      = nochi0105.tk
WORKING_DIR         = /var/www
NGINX_ROOT          = ${WORKING_DIR}
.PHONY: test
test:
	@echo $(NGINX_ROOT)
	@echo $(SERVER_NAME)
	@echo ${MYSQL_USER}
	@echo ${MYSQL_PASSWORD}
	@echo ${MYSQL_DATABASE}
	@echo ${MYSQL_ROOT_PASSWORD}

.PHONY: install
install: 
	chmod +x .docker/install.sh
	.docker/install.sh $(SERVER_NAME) $(NGINX_ROOT) $(WORKING_DIR) $(MYSQL_ROOT_PASSWORD) $(MYSQL_DATABASE) $(MYSQL_USER) $(MYSQL_PASSWORD)

up:
	cd $(PWD)/.docker/ && \
		export SERVER_NAME=$(SERVER_NAME) && \
		export NGINX_ROOT=$(NGINX_ROOT) && \
		export WORKING_DIR=$(WORKING_DIR) && \
		export MYSQL_ROOT_PASSWORD=$(MYSQL_ROOT_PASSWORD) && \
		export MYSQL_DATABASE=$(MYSQL_DATABASE) && \
		export MYSQL_USER=$(MYSQL_USER) && \
		export MYSQL_PASSWORD=$(MYSQL_PASSWORD) && \
		docker-compose -p $(SERVER_NAME) up

.PHONY: remove
remove: 
	cd $(PWD)/.docker/ && \
	docker-compose -p $(SERVER_NAME) down
	sudo sh -c "sed -i -e 's/127.0.0.1   $(SERVER_NAME)//g' /etc/hosts"
down:
	cd $(PWD)/.docker/ && \
	docker-compose -p $(SERVER_NAME) down
stop:
	cd $(PWD)/.docker/ && \
	docker-compose -p $(SERVER_NAME) stop

.PHONY: ssh $(t)
ssh:
	docker exec -it $(SERVER_NAME).$(filter-out $@,$(MAKECMDGOALS)) /bin/bash
%:
	@:
