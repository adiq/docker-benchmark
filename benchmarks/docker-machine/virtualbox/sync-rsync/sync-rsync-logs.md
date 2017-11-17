# VirtualBox & RSync

Logs:
```
$ dumbbench --precision 0.80 --initial 10 --maxiter 100 --float -- docker exec -it syncrsync_vbox-benchmark-sync-rsync_1 time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000
100000+0 records in
100000+0 records out
real	0m 0.22s
user	0m 0.00s
sys	0m 0.22s
100000+0 records in
100000+0 records out
real	0m 0.27s
user	0m 0.01s
sys	0m 0.24s
100000+0 records in
100000+0 records out
real	0m 0.22s
user	0m 0.01s
sys	0m 0.20s
100000+0 records in
100000+0 records out
real	0m 0.27s
user	0m 0.04s
sys	0m 0.21s
100000+0 records in
100000+0 records out
real	0m 0.24s
user	0m 0.00s
sys	0m 0.24s
100000+0 records in
100000+0 records out
real	0m 0.22s
user	0m 0.00s
sys	0m 0.21s
100000+0 records in
100000+0 records out
real	0m 0.19s
user	0m 0.03s
sys	0m 0.16s
100000+0 records in
100000+0 records out
real	0m 0.26s
user	0m 0.04s
sys	0m 0.21s
100000+0 records in
100000+0 records out
real	0m 0.27s
user	0m 0.01s
sys	0m 0.25s
100000+0 records in
100000+0 records out
real	0m 0.21s
user	0m 0.00s
sys	0m 0.20s
100000+0 records in
100000+0 records out
real	0m 0.25s
user	0m 0.00s
sys	0m 0.24s
cmd: Ran 10 iterations (0 outliers).
cmd: Rounded run time per iteration: 0.388500 +/- 0.005700 (1.5%)```