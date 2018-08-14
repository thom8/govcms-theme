ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM govcms/php:7.1-fpm

COPY --from=cli /app /app
