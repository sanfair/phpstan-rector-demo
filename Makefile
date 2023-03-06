include docker.mk

.PHONY: php71 php72 php74 php80

php71:
	docker exec -ti -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php_7_1$$' --format "{{ .ID }}") $(filter-out $@,$(MAKECMDGOALS))
php72:
	docker exec -ti -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php_7_2$$' --format "{{ .ID }}") $(filter-out $@,$(MAKECMDGOALS))
php74:
	docker exec -ti -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php_7_4$$' --format "{{ .ID }}") $(filter-out $@,$(MAKECMDGOALS))
php80:
	docker exec -ti -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php_8_0$$' --format "{{ .ID }}") $(filter-out $@,$(MAKECMDGOALS))
