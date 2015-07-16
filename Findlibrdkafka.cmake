# Locate librdkafka library
#  LIBRDKAFKA_INCLUDE_DIR, where to find librdkafka.h
#  LIBRDKAFKA_LIBRARIES

MESSAGE(STATUS "Using bundled Findlibrdkafka.cmake...")

find_path(LIBRDKAFKA_INCLUDE_DIR librdkafka/rdkafka.h
  PATHS
    /usr/include/
    /usr/local/include/
)

find_library(LIBRDKAFKA_LIBRARIES
  NAMES
    librdkafka.a
    rdkafka
  PATHS
    /usr/lib/
    /usr/local/lib/
    /usr/lib/x86_64-linux-gnu
)
