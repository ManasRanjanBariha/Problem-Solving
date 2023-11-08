class Solution {
    int findMaximum(int[] arr, int n) {
        // code here
        if(n==1)
        {
            return arr[0];
        }
        int l=0;
        int r=arr.length-1;
        
        while(l<=r)
        {
            int mid=l+(r-l)/2;
            if(mid > 0 && mid <n-1)
            {
                if(arr[mid] > arr[mid-1] && arr[mid] > arr[mid+1] )
                {
                    return arr[mid];
                }

                else if(arr[mid] > arr[mid-1])
                {
                    l=mid+1;
                }
                else{
                    r=mid-1;
                }
            }
            else if(mid ==0)
            {
                return arr[0]>arr[1]?arr[0]:arr[1];
            }
            else if(mid+1==n  )
            {
                return arr[mid-1] > arr[mid]? arr[mid-1]:arr[mid];
            }
            
        }
        return -1;
    }
}