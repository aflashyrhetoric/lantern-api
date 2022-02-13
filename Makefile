.PHONY: up reset

up:
	vendor/bin/sail up

reset:
	vendor/bin/sail down --rmi all -v