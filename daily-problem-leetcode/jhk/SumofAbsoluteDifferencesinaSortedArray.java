class Solution {
    public int[] getSumAbsoluteDifferences(int[] nums) {
        int sum=0;
        for(int i:nums)
        {
            sum+=i;
        }
        int left=0;
        int right=sum;
        int []r=new int[nums.length];
        for(int i=0;i<nums.length;i++)
        {
            int n=nums[i];
            right-=n;
            r[i]=n*i-left+right-n*(nums.length-i-1);
            left+=n;
        }
        return r;
    }
}