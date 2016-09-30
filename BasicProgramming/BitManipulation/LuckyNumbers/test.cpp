#include<iostream>
#include<cmath>
#include<cstdio>
#include<vector>
#include<algorithm>
using namespace std;
#define LL long long int
vector<long long int>vec;

LL fpow(LL a, LL b) {
    LL prod = 1;
    while(b) {
        if(b&1) prod = (prod*a);
        b/=2;
        a = a*a;
    }
    return prod;
}

void precompute() {
    long long int num;
    int bits = 62;
    for(int i=0;i<bits;i++) {
        for(int j=i+1;j<bits;j++) {
            num = fpow(2LL,i) + fpow(2LL,j);
            vec.push_back(num);
        }
    }
}

int main() {
    int t;
    long long int mod = 1000000007;
    long long int n,num,ans;
    precompute();
    sort(vec.begin(),vec.end());
    int len = vec.size();
    scanf("%d",&t);
    while(t--) {
        ans = 0;
        scanf("%lld",&n);
        int i=0;
        while(i< len && vec[i]<=n) {
            ans = ans + vec[i];
            ans%=mod;i++;
        }
        printf("%lld\n",ans);
    }
    return 0;
}
