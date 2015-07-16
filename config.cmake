# HHVM needs to link phpkafka to librdkafka
# Locate librdkafka library defines
#  LIBRDKAFKA_INCLUDE_DIR, where to find librdkafka.h
#  LIBRDKAFKA_LIBRARIES
INCLUDE(Findlibrdkafka.cmake)

HHVM_COMPAT_EXTENSION(rdkafka
  kafka.cpp
  php_kafka.cpp
)

HHVM_ADD_INCLUDES(rdkafka ${LIBRDKAFKA_INCLUDE_DIR})
HHVM_LINK_LIBRARIES(rdkafka ${LIBRDKAFKA_LIBRARIES})
HHVM_SYSTEMLIB(rdkafka ext_rdkafka.php)
