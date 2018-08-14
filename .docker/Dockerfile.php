ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM alexdesignworks/php

COPY --from=cli /app /app
