package java;

class ProductofArrayExceptSelf {
    public int[] productExceptSelf(int[] nums) {
        int n=nums.length;
        int []left=new int[n];
        int right=1;
        left[0]=1;
        for(int i=1;i<n;i++)
        {
            left[i]=nums[i-1]*left[i-1];
        }
        for(int i=n-2;i>=0;i--)
        {
            right=right*nums[i+1];
            left[i]*=right;
        }
        
        return left;
    }
}