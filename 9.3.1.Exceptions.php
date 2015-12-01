<?php

protected function setFirstName($firstName)
{
    // Check if value is a string
    if (!is_string($firstName)) {
        throw new Exception('$firstName must be a string!');
    }

    $this->firstName = trim($firstName);
}

protected function setLastName($lastName)
{
    // Check if value is a string
    if (!is_string($lastName)) {
        throw new Exception('$lastName must be a string!');
    }

    $this->lastName = trim($lastName);
}
